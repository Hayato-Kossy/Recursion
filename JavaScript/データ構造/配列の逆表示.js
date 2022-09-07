class Node{
    constructor(data){
        this.data = data;
        this.next = null;
    }
}

class Stack{
    constructor(){
        this.head = null;
    }

    push(data){
        let temp = this.head;
        this.head = new Node(data);
        this.head.next = temp;
    }

    pop(){
        if (this.head == null) return null;
        let temp = this.head;
        this.head = this.head.next;
        return temp.data;
    }

    peek(){
        return this.head == null ? null : this.head.data;
    }
}

function reverse(arr){
    let stack = new Stack();
    let ans = [];
    for (let i = 0; i < arr.length; i++){
        stack.push(arr[i]);
    } 

    for (let i = 0; i < arr.length; i++){
        ans.push(stack.pop());
    } 

    return ans;
}