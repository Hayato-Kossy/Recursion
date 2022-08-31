class SinglyLinkedListNode<E>{
    public E data;
    public SinglyLinkedListNode<E> next;

    public SinglyLinkedListNode(E data){
        this.data = data;
        this.next = null;
    }
}

class Solution{
    public static int getIndexValue(SinglyLinkedListNode<Integer> head, int index){
        if (index == 1) return head.data;
        return getIndexValue(head.next, index - 1);
        
    }
}