class SinglyLinkedListNode<E>{
    public E data;
    public SinglyLinkedListNode<E> next;

    public SinglyLinkedListNode(E data){
        this.data = data;
        this.next = null;
    }
}

class Solution{
    public static SinglyLinkedListNode<Integer> insertAtTail(SinglyLinkedListNode<Integer> head, int data){
        SinglyLinkedListNode<Integer> node = head;

        while (node.next != null){
            node = node.next;
        }
        node.next = new SinglyLinkedListNode <Integer> (data);
        return head;
    }
}