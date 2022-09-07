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

let s1 = new Stack()
s1.push(2)
console.log(s1.peek())
s1.push(4)
s1.push(3)
s1.push(1)
console.log(s1.pop())
console.log(s1.peek())


let s2 = new Stack()
s2.pop()
s2.push(9)
s2.push(8)
console.log(s2.peek())