package JAVA;
public class Main {
 public static void main(String[] args) {
    UberX uberX = new UberX("AMq123",new Account("Andres Herrera", "131234"),"Chevrolet","tico"); 

    uberX.setPassenger(4);
    uberX.printDataCar();

    UberVan uberVan = new UberVan("FHS1234", new Account("ANDRES Herrera", "NDJS1234"));
    uberVan.setPassenger(6);
    uberVan.printDataCar();

    /*Car car2 = new Car("QWE123", new Account("Jose Luis","345354"));
    car2.passenger= 4;
    car2.printDataCar();*/
 }
    
}