class SinglyLinkedListNode{
    constructor(data) {
        this.data = data;
        this.next = null;
    }
}

function linkedListSearch(head,data){
    let index = 0;
    let iterator = head;

    while (iterator != null){
        if (iterator.data == data) return index;
        iterator = iterator.next;
        index += 1;
    }

    return -1;
}