import unittest, time
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

class LoginTest(unittest.TestCase):
    @classmethod
    def setUpClass(cls):
        cls.driver = webdriver.Chrome(executable_path= 'drivers/chrome/chromedriver.exe')
        cls.driver.get("http://localhost/trainco.github.io/index.html")
        cls.driver.maximize_window()
        cls.driver.delete_all_cookies()
        cls.driver.implicitly_wait(15)

    # TestCase: Iniciar sesion Cliente
    def test_0001(self):
        driver = self.driver
        time.sleep(12)
        IniciarSesion = WebDriverWait(driver,10).until(EC.element_to_be_clickable((By.XPATH,
        '//b[text()="Iniciar Sesion"]')))
        IniciarSesion.click()
        time.sleep(2)
        correo = WebDriverWait(driver,10).until(EC.element_to_be_clickable((By.NAME,
        'email')))
        correo.send_keys('Cliente@test.com')
        password = WebDriverWait(driver,10).until(EC.element_to_be_clickable((By.NAME,
        'password')))
        password.send_keys('123456789')
        time.sleep(2)
        Login = WebDriverWait(driver,10).until(EC.element_to_be_clickable((By.XPATH,
        '/html/body/div[2]/div/form/input[3]')))
        Login.click()
        driver.implicitly_wait(5)
        time.sleep(5)
        CerrarSesion = WebDriverWait(driver,10).until(EC.element_to_be_clickable((By.XPATH,
        '//b[text()="Cerrar Sesion"]')))
        CerrarSesion.click()
        time.sleep(5)


    # TestCase: Iniciar sesion Entrenador
    def test_0002(self):
        driver = self.driver
        IniciarSesion = WebDriverWait(driver,10).until(EC.element_to_be_clickable((By.XPATH,
        '//b[text()="Iniciar Sesion"]')))
        IniciarSesion.click()
        correo = WebDriverWait(driver,10).until(EC.element_to_be_clickable((By.NAME,
        'email')))
        correo.send_keys('Entrenador@test.com')
        password = WebDriverWait(driver,10).until(EC.element_to_be_clickable((By.NAME,
        'password')))
        password.send_keys('123456789')
        time.sleep(1)
        Login = WebDriverWait(driver,10).until(EC.element_to_be_clickable((By.XPATH,
        '/html/body/div[2]/div/form/input[3]')))
        Login.click()
        driver.implicitly_wait(5)
        time.sleep(5)
        CerrarSesion = WebDriverWait(driver,10).until(EC.element_to_be_clickable((By.XPATH,
        '//span[text()="Entrenador@test.com"]')))
        CerrarSesion.click()
        time.sleep(1)
        Logout = WebDriverWait(driver,10).until(EC.element_to_be_clickable((By.XPATH,
        '//a[text()="Cerrar sesion"]')))
        Logout.click()
        time.sleep(5)

        
    # TestCase: Iniciar sesion Administrador
    def test_0003(self):
        time.sleep(2)
        driver = self.driver
        IniciarSesion = WebDriverWait(driver,10).until(EC.element_to_be_clickable((By.XPATH,
        '//b[text()="Iniciar Sesion"]')))
        IniciarSesion.click()
        correo = WebDriverWait(driver,10).until(EC.element_to_be_clickable((By.NAME,
        'email')))
        correo.send_keys('Admin@test.com')
        password = WebDriverWait(driver,10).until(EC.element_to_be_clickable((By.NAME,
        'password')))
        password.send_keys('123456789')
        time.sleep(1)
        Login = WebDriverWait(driver,10).until(EC.element_to_be_clickable((By.XPATH,
        '/html/body/div[2]/div/form/input[3]')))
        Login.click()
        driver.implicitly_wait(5)
        time.sleep(5)
        CerrarSesion = WebDriverWait(driver,10).until(EC.element_to_be_clickable((By.XPATH,
        '//span[text()="Admin@test.com"]')))
        CerrarSesion.click()
        time.sleep(1)
        Logout = WebDriverWait(driver,10).until(EC.element_to_be_clickable((By.XPATH,
        '//a[text()="Cerrar sesion"]')))
        Logout.click()
        time.sleep(5)
                
    #Close Browser
    @classmethod
    def tearDownClass(cls):
        cls.driver.quit()