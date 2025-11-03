let arr1 = [1,2,3];
let arr2 = [4,5,6];
let arr3 = arr1.concat(arr2);
arr3.concat(7,8,9);
console.log(arr3);
arr3.splice(0,1);
console.log(arr3);
arr3.splice(2,3);
console.log(arr3);