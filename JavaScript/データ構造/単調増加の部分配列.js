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

function consecutiveWalk(arr){
    let stack = new Stack();
    let ans = [];

    stack.push(arr[0]);
    for (let i = 1; i < arr.length; i++){
        if (stack.peek() > arr[i]){
            while (stack.peek() != null){
                stack.pop();
            }
        }
        stack.push(arr[i]);
    }

    while (stack.peek() != null) {
        ans.push(stack.pop());
    }

    return ans;
}