class Node{
    constructor(data){
        this.data = data;
        this.next = null;
    }
}

class Queue{
    constructor(){
        this.head = null;
        this.tail = null;
    }

    peekFront(){
        return this.head == null ? null : this.head.data;
    }

    peekBack(){
        return this.tail == null ? this.peekFront() : this.tail.data;
    }

    enqueue(data){
        if (this.head == null) this.head = new Node(data);
        else if (this.tail == null) {
            this.tail = new Node(data);
            this.head.next = this.tail;
        }
        else {
            this.tail = new Node(data);
            this.tail.next = this.tail;
        }
    }

    dequeue(){
        if (this.head == null) return null;

        let temp = this.head;
        this.head = this.head.next;

        return temp.data;
    }
}

let q = new Queue()

q.enqueue(4)
console.log(q.peekFront())
console.log(q.peekBack()) 
q.enqueue(50)
console.log(q.peekFront()) 
console.log(q.peekBack()) 
q.enqueue(64)
console.log(q.peekFront()) 
console.log(q.peekBack()) 
console.log(q.dequeue())