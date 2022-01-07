import requests
from requests import get
from bs4 import BeautifulSoup
import numpy as np
import pandas as pd
import random
import time

posts = []
companys = []
description = []
location = []
experience = []

r = np.arange(1,11,1)
for s in r:
    time.sleep(random.randint(2,10))
    url = f"https://www.monsterindia.com/search/python-jobs-{s}"
    headers = {'user-agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36'}
    results = requests.get(url, headers=headers)
    soup = BeautifulSoup(results.text, "html.parser")
    jobs_div = soup.find_all('div', class_='job-tittle')
    for container in jobs_div:
        post = container.h3.a.text 
        posts.append(post)
        company = container.span.a if container.span.a != None else container.span
        companys.append(company.text)
        x = container.find_all('span', class_ = 'loc')
        place = x[0].small.text
        location.append(place)
        exp = x[1].small.text
        experience.append(exp)
    jobs_p = soup.find_all('p', class_ = 'job-descrip hidden-sm')
    for x in jobs_p:
        text = x.text
        description.append(text)
jobs = pd.DataFrame({
'posts': posts,
'companys': companys,
'location': location,
'experience': experience,
'description': description
})
jobs['location'] = jobs['location'].replace(r'\s+|\\n', ' ', regex=True)
jobs['location'] = jobs['location'].str.replace(',', '')
jobs['companys'] = jobs['companys'].replace(r'\s+|\\n', ' ', regex=True)
jobs['companys'] = jobs['companys'].str.replace(',', '')
jobs['experience'] = jobs['experience'].replace(r'\s+|\\n', ' ', regex=True)
jobs['experience'] = jobs['experience'].str.replace(',', '')
jobs['posts'] = jobs['posts'].replace(r'\s+|\\n', ' ', regex=True)
jobs['posts'] = jobs['posts'].str.replace(',', '')
jobs['description'] = jobs['description'].replace(r'\s+|\\n', ' ', regex=True)
jobs['description'] = jobs['description'].str.replace(',', '')

pd.set_option('display.max_columns', None)
pd.set_option('display.width', None)
pd.set_option('display.max_colwidth', None)

jobs.to_csv('monster.csv', index = False)

