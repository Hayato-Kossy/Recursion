class SinglyLinkedListNode{
    constructor(data) {
        this.data = data;
        this.next = null;
    }
}

function linkedListLastValue(head){
    let iterator = head;

    while(iterator.next != null){
        iterator = iterator.next;
    }

    return iterator.data;
}