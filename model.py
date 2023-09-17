import transformers
from peft import LoraConfig, get_peft_model
from transformers import AutoModelForCausalLM, AutoTokenizer,BitsAndBytesConfig
import torch
device = torch.device("cuda:0" if torch.cuda.is_available() else "cpu")
flag = True
if not flag:


    
    auth_token = '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'
    model_name = "meta-llama/Llama-2-7b-chat-hf"
    bnb_config = BitsAndBytesConfig(
        load_in_4bit=True,
        bnb_4bit_use_double_quant=True,
        bnb_4bit_quant_type="nf4",
        bnb_4bit_compute_dtype=torch.bfloat16,
    )

# tokenizer_path = "C:/Users/armaa/OneDrive/Desktop/ACM/Simplilegal/dataset/tokenizer"
# model_path = "C:/Users/armaa/OneDrive/Desktop/ACM/Simplilegal/dataset/model"
    dataset="C:/Users/armaa/OneDrive/Desktop/ACM/Simplilegal/dataset"
    tokenizer = AutoTokenizer.from_pretrained( model_name,token=auth_token)
    model = AutoModelForCausalLM.from_pretrained(model_name,config=bnb_config, token=auth_token)

    lora_config = LoraConfig.from_pretrained(dataset)
# tokenizer = get_peft_model(tokenizer,lora_config)
    model = get_peft_model(model,lora_config)

else:   
    def send(name,length):           
        text = name
        max_tok = length
#device = "cuda:0"    #puts load on gpu

        inputs = tokenizer(text, return_tensors="pt").to(device)
        outputs = model.generate(**inputs, max_new_tokens=max_tok)
        print(tokenizer.decode(outputs[0], skip_special_tokens=True))