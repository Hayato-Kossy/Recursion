import java.util.Arrays;

class SinglyLinkedListNode<E>{
    public E data;
    public SinglyLinkedListNode<E> next;

    public SinglyLinkedListNode(E data){
        this.data = data;
        this.next = null;
    }
}

class Solution{
    public static SinglyLinkedListNode<Integer> getLinkedList(int[] arr){
        SinglyLinkedListNode head = new SinglyLinkedListNode(arr[0]);
        SinglyLinkedListNode currentNode = head;

        for (int i = 1; i < arr.length; i++){
            currentNode.next = new SinglyLinkedListNode(arr[i]);
            currentNode = currentNode.next;
        }
        return head;
    }
}