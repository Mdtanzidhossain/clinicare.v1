from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time

driver = webdriver.Chrome(ChromeDriverManager().install())

driver.get("http://localhost/clinicare/ambulance/pay.php")
# print(driver.title)



input_location = driver.find_element_by_xpath('/html/body/section[2]/div/ul/form/div[1]/h3[1]/input')
input_contact_no = driver.find_element_by_xpath('/html/body/section[2]/div/ul/form/div[1]/h3[2]/input')
input_bikash_no = driver.find_element_by_xpath('/html/body/section[2]/div/ul/form/div[1]/h3[3]/input')

input_location.send_keys("uttara")
time.sleep(5)
input_contact_no.send_keys("0195960844")
time.sleep(5)
input_bikash_no.send_keys("01959608444")

btnSubmit = driver.find_element_by_xpath('/html/body/section[2]/div/ul/form/div[1]/input')
btnSubmit.click()


while True:
	pass