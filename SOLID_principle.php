
https://www.youtube.com/watch?v=-T0H--a8WnY&list=PLTCrU9sGybuq3Jz51xfT3mA2BIVNDHwIV&index=1
S=> Single Responsibility Principle
O=> Open-Closed Principle
L=> Liskov Substitution Principle
I=> Interface Segregation Principle
D=> Dependency Inversion Principle


The SOLID Principles are five principles of Object-Oriented class design.
They are a set of rules and best practices to follow while designing a class structure


They all serve the same purpose:

"To create understandable, readable, and testable code that many developers can collaboratively work on."


s=> Single Responsibility Priciple
"a class should do one thing and therefore it should have only a single reason to change"
"A class should have one and only one reason to change,
meaning that a class should have only one job"
    [
        =>module should have only one responsibility 
        =>module means set of function ,class, package,sources code  should have only one actor can change this  
    ]
 e.g 
    class Employee{
        calculateSalary() -> CFO
        calculateHours()  -> HR
        saveEmpdata()     ->techical
    }

    resovled is problem useing fascad methods 
    break the classes 
---------------------------------------------
    Menu Items{
        finalAmount()
        printBill()
        saveBill()
    } 
    resovled is problem useing fascad methods
    bill{
        finalAmount()
        printBill()
    }
    store{
        saveBill()
    }
    

O=> Open-Closed Principle
Objects or entities should be open for extension,but closed for modification

e.g
class Account{            class IAccount{
    name {get;set;}             CalculateInterset(Account account);
    address {get;set;}   }
    blance {get;set;}
}

class savingAccount extends IAccount {    class OtherAccount extends IAccount {}
    CalculateInterset(Account account){    CalculateInterset(Account account){
        retrun account.balance * 0.3;       retrun account.balance * 0.5;
                                            }
    }                                       }
}
L=> Liskov Substitution Principle
let q(x)be property rpovide about objects of x of type T.
then q(y) should be provide for objects y of type S where S
is a subtype of T.

    [
     => if a functin takes an instance of a class.
     => That same function should also be able to take the instance of derived class from that class
    
    ]
e.g :
    class C{
        x();
    }
    class C1 extends C{    class C2 extends C{

    }                       }

    C1 c1=new C1();
    C2 c2=new C2();
    c1.x();
    c2.x();
class t{
q()
}
class s{} not implments on subclass s this not liskov priciple fllow(must be use and)

I=> Interface Segregation Principle
A client should never be forced to implement an interface that it does't ot
client shouldn't be forced to depend on methods they do not use
    
    [
        => Ine interface should not be handing a lot of respinsiblities. instead ,multiple interfaces should be handing difference responsibilites

        ]


        eg 
        class DBstore{    class CacheStore{
               save()           Addkey()
               delete()         removekey()
               update()         Evict()
               fetch()          }
        }


example : suppose when you go in ATM and then choice cash wirthowle option
then ATM pin input taken money atfer not show blance
becuse you choice balance enquir that use balance check option

D=> Dependency Inversion Principle
Entities must depend on abstraction not on concretions.
it states that the high level modules must not depend on the
low level module, but the should depend on abstractions
example : abstruct, interface like class not depend on the child class
extends on implmemts class

[
    =>high level modules should not depend on low level mdoules,
    =>both should depend on abstraction,
    =>abstraction should not depend on implementation
    =>implementation should depend on abstraction

]

e.g 
class A{} 
class B{} depend b
class c{} depend b if changes on c that change impcted on b

sloved 
class A{} ----> interface B{}  interface b depend interface c
classe B{} --->     
class C{}  ==-->interface C{}


interface DBstore{    interface CacheStore{
               save()           Addkey()
               delete()         removekey()
               update()         Evict()
               fetch()          }
        }

https://www.youtube.com/watch?v=xAXLfydR5wM&t=642s


//-------------------------------------------------------------------------------
ACID properties in DBMS

A => Atomicity
The entire transction taken place at one or doesn;t happen at all.
"must be completed successfully, if any of them fails, rollback happen"

try{
$db->beginTransaction();
$db->query('frist query');
$db->query('second query');
$db->query('thired query');
$db->commit();
}catch(Exception $e){
$db->rollback();
}

C => Consistencr
The database must be consisent before and after the transction

example : in-consistencr : amount of rs 500 will be deducted from acoount A.
 amount of rs 500 will be be added to acount B.
if account deducted then some database problem occurs then if acoount b not added is problem in-consisent


I => Isolation
Multiple Transction occur independently without interfernce

example : multiple query on transction 1st query on dependent on 2nd
2nd query not be dependent on query 3rd
all query self dependent query

D => Durability
The changes of a successful transction occurs even if the system failure occurs.

example : if any problem means system failer and internet down and server down
this type occurs problem if you get clear status for all transction completed or rollback