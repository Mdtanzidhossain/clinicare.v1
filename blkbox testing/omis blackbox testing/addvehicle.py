from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time

driver = webdriver.Chrome(ChromeDriverManager().install())

driver.get("http://localhost/clinicare/ambulance/admin/add_vehicles.php")

#input_name = driver.find_element_by_xpath('/html/body/div[2]/div/div[2]/div[2]/div/form/div[1]/p[1]/input')
#input_make = driver.find_element_by_xpath('/html/body/section/div/div/form/table/tbody/tr[2]/td[2]/input')
#input_price = driver.find_element_by_xpath('/html/body/div[2]/div/div[2]/div[2]/div/form/div[1]/p[3]/input')
#input_image = driver.find_element_by_xpath('/html/body/div[2]/div/div[2]/div[2]/div/form/div[1]/p[4]/input')
#input_capacity = driver.find_element_by_xpath('/html/body/div[2]/div/div[2]/div[2]/div/form/div[1]/p[5]/input')


#input_name.send_keys("random")
#input_make.send_keys("random")
#input_price.send_keys("1")
#input_image.send_keys("https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Black_colour.jpg/576px-Black_colour.jpg")
#time.sleep(5)
#input_capacity.send_keys("1")

btnSubmit = driver.find_element_by_xpath('/html/body/div[2]/div/div[2]/div[3]/div/div[2]/a/span')
btnSubmit.click()


while True:
	pass