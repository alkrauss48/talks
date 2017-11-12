function printArray(list) {

  // Base case - check if array is empty
  if(list.length === 0) {
    return;
  }

  console.log(list[0]);

  printArray(list.slice(1));
}

var list = [1, 2, 3];

printArray(list);
