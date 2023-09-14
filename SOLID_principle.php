

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

O=> Open-Closed Principle
Objects or entities should be open for extension,but closed for modification

L=> Liskov Substitution Principle
let q(x)be property rpovide about objects of x of type T.
then q(y) should be provide for objects y of type S where S
is a subtype of T.

class t{
q()
}
class s{} not implments on subclass s this not liskov priciple fllow(must be use and)

I=> Interface Segregation Principle
A client should never be forced to implement an interface that it does't ot
client shouldn't be forced to depend on methods they do not use

example : suppose when you go in ATM and then choice cash wirthowle option
then ATM pin input taken money atfer not show blance
becuse you choice balance enquir that use balance check option

D=> Dependency Inversion Principle
Entities must depend on abstraction not on concretions.
it states that the high level modules must not depend on the
low level module, but the should depend on abstractions
example : abstruct, interface like class not depend on the child class
extends on implmemts class



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