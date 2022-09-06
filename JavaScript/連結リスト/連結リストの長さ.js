class SinglyLinkedListNode{
    constructor(data) {
        this.data = data;
        this.next = null;
    }
}

function linkedListLength(head){
    let count = 0;
    let iterator = head;

    while (iterator != null){
        iterator = iterator.next;
        count += 1;
    }

    return count;
}