from unittest import TestLoader, TestSuite
from pyunitreport import HTMLTestRunner

# Se llama el archivo y la clase
from Login import LoginTest

Login_test = TestLoader().loadTestsFromTestCase(LoginTest)



# Report Regresion
Run_Login_test = TestSuite([Login_test])

kwargs = {
    "output" : '',
    "report_name": 'Login',
    'failfast': 'true'
}

runner = HTMLTestRunner(**kwargs) 
runner.run(Run_Login_test) 
