class SinglyLinkedListNode{
    constructor(data) {
        this.data = data;
        this.next = null;
    }
}

function findMinNum(head){
    let iterator = head;
    let num = Infinity;
    let count = 0;
    let ans = 0;
    
    while (iterator != null){
        if (iterator.data <= num) {
            num = iterator.data;
            ans = count;
        }
        count += 1;
        iterator = iterator.next;
    }

    return ans;
}