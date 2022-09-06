class SinglyLinkedListNode{
    constructor(data) {
        this.data = data;
        this.next = null;
    }
}

function insertAtPosition(head,position,data){
    let iterator = head;
    let index = 0;
    let node = new SinglyLinkedListNode(data);

    while(iterator != null){
        if (index == position) {
            let temp = iterator.next;
            iterator.next = node;
            node.next = temp;
            break;
        }
        index += 1;
        iterator = iterator.next;
    }

    return head;
}