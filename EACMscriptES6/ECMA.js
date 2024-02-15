// new Features in ES6
https://www.youtube.com/watch?v=3A-_ebOnpS4&t=450s
//https://www.youtube.com/watch?v=Gir551orcPw&list=PLjVLYmrlmjGe3fUTOCarulICb3R8iAh4t&index=11

/*

1 The Let Kayword
2 The const Kayword
3 javascript Class
4 javascript Promise
5 Javascript Symbol
6 Javascritp Arrow function
7 Default Parameter Values
8 Function rest parameter
9 Array.find()
10 Array.findindex()
11 New Number properties
12 New Number Methods
13 New Gobal Mehtods

Var : used to define variales which can be reassigned
    : variable defined with var are accessiable globally. 

1) the let keyword

let:  
     :used to define variables which can be be ressigned (same as )
     : variable defined with let are accessible within he block is declared

let allows you to declare variables that are block-scoped, meaning they exist only within the block of code in which they are defined (for example, within a function or a loop).
*/
function example() {
    let x = 10;
    if (true) {
      let x = 20; // This variable x is different from the one declared above
      console.log(x); // 20
    }
    console.log(x); // 10
  }


console.log(name); //ReferenceError: Cannot access 'name' before initialization
let name ='wlcme to india';
console.log(name);
/*
2) The const Kayword
   const:
            : used ti define variable which cn't be reassigned
            : variable defined wit hconst are accessible globally
const is used to declare constants, which are variables that cannot be reassigned after their initial assignment.

Like let, const is block-scoped.
When you use const to declare an object or array, the reference to the object or array is constant, but the internal values can still be modified.
  */
const PI = 3.14;
// PI = 3.14159; // Error: Assignment to constant variable

const arr = [1, 2, 3];
// arr = [4, 5, 6]; // Error: Assignment to constant variable
arr.push(4); // This is allowed
console.log(arr); // [1, 2, 3, 4]


/*
3) Javascritp Arrow function
  : 
*/

const student = name =>{
    return "hello"+name;
};
console.log(student('shiv'));

// multple arguments pass in 

let emp = (name,age) =>{
    return "hello"+name+age;
};
console.log(student('shiv',10));


// const person={
    
//   test(){
//     console.log(this);
//   }
  
// };
// person.test();

const person={
    
    test(){
      self=this;
      setTimeout(function(){
         console.log(self);
      },2000);
     
    }
    
  };
  person.test();


  /*
  Tamplate literals
  */
  var name="Shiv";
  console.log(`Welcome to ${name}! have a nice day`); // use tol signe orverride ' and ""

  var name="Shiv";
  console.log(`
 Welcome 
 to ${name}! 
 have a nice day`);

 
 /*
  Array & Object Destructing:

    :Destruction makes the assignment of the values of an array or object to the new variable easier
 
 */

    //ES5
    var details={
        name: 'Shiv',
        contact:'any where',
    }
    
    console.log(details.name);
    console.log(details.contact);

    //ES6
    var details={
        name: 'Shiv',
        contact:'any where',
    }
    let {name,contact}=details;
    console.log(name);
    console.log(contact);

    //----------------------------------
    const arr=["A","B","C"];
    //Es5
    var v1=arr[0];
    //ES6
    let [a1,a2,a3]=arr;
    console.log(a1);
    console.log(a2);
    console.log(a3);

    /*
    
    Import & Export :

        :using mport and export in your Javascript application makes it more poweril
        
        :The allow you to create separate and resble components
        
        :Export allow you to export a module to be used in another javascript components.
        
        : we us import to import that module to use it in our component
    
    */

    /*
        4 javascript Promises

        :A promise in javascript is similar to a promise in real life
        :when we make a promise in real life it is a guarantee that we are going to do somthing in the future
        :beacuse promise can only be made for the future
        :a promise is an object there are 3 states of the succeeds or fail
            Pending: initial state before the promise succeed or ails
            Resloved:ompleted promise
            Rejected:fauiled promise
    */

            const myPromise=new Promise((resolved,rejected)=>{
                const a=2,b=2;
                const c=a+b;
                if(c===4){
                  resolved(`yes!, ${a} + ${b}=4`);
                }else{
                  rejected(`No! ${a} + $ {b} !=4`);
                }
              });
              
              myPromise.then((m)=>{
                console.log(m);
              }).catch((error)=>{
                console.log(error);
              })

/*
    array spread : marge the array 
    
*/
const oldarray=[1,2,3,4];
const newarr=["a","b","c",...oldarray,5,6,7,8,10];
console.log(newarr);


/*
    array rest
*/
const sum = (...arr) =>{
    let total=0;
    arr.forEach((n)=>{
      total +=n;
    });
    console.log(total);
  }
  sum(1,2,3,4,5,6,7,8,9);

  /**
   * map
   */

  const courses=['SHIV','OM','SHIVAYI'];
const newArr= courses.map((c)=>{
  return `<li> ${c} </li`;
});
console.log(newArr);

const arr=[1,2,3,4,5,6];
const sum= arr.map((s)=>s*5);
console.log(sum);