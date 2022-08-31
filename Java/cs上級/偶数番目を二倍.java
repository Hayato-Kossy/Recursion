class SinglyLinkedListNode<E>{
    public E data;
    public SinglyLinkedListNode<E> next;

    public SinglyLinkedListNode(E data){
        this.data = data;
        this.next = null;
    }

    public void addNextNode(SinglyLinkedListNode newNode){
        SinglyLinkedListNode tempNode = this.next;
        this.next = newNode;
        newNode.next = tempNode;
    }
}

class Solution{
    public static SinglyLinkedListNode<Integer> doubleEvenNumber(SinglyLinkedListNode<Integer> head){

        SinglyLinkedListNode currentNode = head;

        int count = 0;
        while (currentNode != null) {
            if (count % 2 == 0) {
                currentNode.addNextNode(new SinglyLinkedListNode((int)currentNode.data*2));
                currentNode = currentNode.next.next;
            }
            else {
                currentNode = currentNode.next;
            }
            count++;
        }
        return head;
    }
}