from requests import get
from bs4 import BeautifulSoup
import numpy as np
import pandas as pd
import time
from selenium import webdriver

driver = webdriver.Edge()

posts = []
experience = []
location = []
companys = []
apply_links=[]
description = []


r = np.arange(1,6,1)
for s in r:
    #time.sleep(random.randint(2,10))
    url = 'https://www.naukri.com/python-jobs-{s}?k=python'
    driver.get(url)
    time.sleep(5)

    html = driver.page_source
    soup = BeautifulSoup(html, "html.parser")
    job_Title = soup.find_all('div', class_ = "info fleft")
    for container in job_Title:
        post = container.a.text
        posts.append(post)
        exp = container.ul.li.span.text
        experience.append(exp)
        loc = container.find('li',class_ = "fleft grey-text br2 placeHolderLi location")
        location.append(loc.span.text)
        company = container.find('div', class_ = "mt-7 companyInfo subheading lh16")
        companys.append(company.a.text)
        links = container.a.get('href')
        apply_links.append(links)
    
    job_description = soup.find_all('div', class_ = "job-description fs12 grey-text")
    for container in job_description:
        description.append(container.text)

jobs = pd.DataFrame({
'posts': posts, 
'companys': companys,
'location': location,
'experience': experience,
'description': description,
'links': apply_links
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

jobs.to_csv('naukri.csv', index = False)

