class SinglyLinkedListNode{
    constructor(data) {
        this.data = data;
        this.next = null;
    }
}

function insertNodeInSorted(head,data){
    let iterator = head;
    node = new SinglyLinkedListNode(data);

    if (iterator.data > data) {
        node.next = head;
        return node;
    }

    while(iterator.next != null){
        if(iterator.next.data > data){
            let temp = iterator.next;
            iterator.next = node;
            node.next = temp;
            return head;
        }
        iterator = iterator.next;
    }
    iterator.next = node;
    return head;
}