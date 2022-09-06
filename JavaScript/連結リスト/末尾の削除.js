class SinglyLinkedListNode{
    constructor(data) {
        this.data = data;
        this.next = null;
    }
}

function deleteTail(head){
    let iterator = head;

    while(iterator.next.next != null){
        iterator = iterator.next;
    }

    iterator.next = null;

    return head;
}