import transformers
from peft import LoraConfig, get_peft_model

from transformers import AutoModel, AutoTokenizer,BitsAndBytesConfig
import torch

# !huggingface-cli login
auth_token = "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"

bnb_config = BitsAndBytesConfig(
    load_in_4bit=True,
    bnb_4bit_use_double_quant=True,
    bnb_4bit_quant_type="nf4",
    bnb_4bit_compute_dtype=torch.bfloat16,
)

tokenizer_path = "C:/Users/armaa/OneDrive/Desktop/ACM/Simplilegal/dataset/tokenizer"
model_path = "C:/Users/armaa/OneDrive/Desktop/ACM/Simplilegal/dataset/model"

tokenizer = AutoTokenizer.from_pretrained(tokenizer_path, token=auth_token)

model = AutoModel.from_pretrained(model_path, config=bnb_config, token=auth_token)

lora_config = LoraConfig.from_pretrained('dataset')
tokenizer = get_peft_model(tokenizer,lora_config)
model = get_peft_model(model,lora_config)
                       
text = "Generate income tax draft for a middle class family of 4 members with 2 children."
#device = "cuda:0"    #puts load on gpu

inputs = tokenizer(text, return_tensors="pt")
outputs = model.generate(**inputs, max_new_tokens=100)
print(tokenizer.decode(outputs[0], skip_special_tokens=True))