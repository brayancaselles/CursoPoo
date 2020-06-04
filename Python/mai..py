from car import Car
from account import Account

if __name__ == "__main__":
    print("Hola mundo") 
    car = Car("ASD423", Account("Andres Jose","AHHS!11312"))
    print(vars(car)) 
    print(vars(car.driver))