class SinglyLinkedListNode<E>{
    public E data;
    public SinglyLinkedListNode<E> next;

    public SinglyLinkedListNode(E data){
        this.data = data;
        this.next = null;
    }
}

class Solution{
    public static SinglyLinkedListNode<Integer> insertAtHead(SinglyLinkedListNode<Integer> head, int data){
        SinglyLinkedListNode<Integer> newNode = new SinglyLinkedListNode <Integer> (data);
        newNode.next = head;

        return newNode;
    }
}