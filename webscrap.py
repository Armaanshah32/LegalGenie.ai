# webscrape a website and save the data to a csv file
import requests 
r=requests.get("https://www.python.org/")
print(r.content)