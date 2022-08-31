class SinglyLinkedListNode<E>{
    public E data;
    public SinglyLinkedListNode<E> next;

    public SinglyLinkedListNode(E data){
        this.data = data;
        this.next = null;
    }
}

class Solution{
    public static SinglyLinkedListNode<Integer> removeNthNode(SinglyLinkedListNode<Integer> head, int n){
        SinglyLinkedListNode<Integer> dummyNode = new SinglyLinkedListNode<Integer> (0);
        dummyNode.next = head;
        SinglyLinkedListNode<Integer> iterator = head;

        SinglyLinkedListNode<Integer> fast = dummyNode;
        SinglyLinkedListNode<Integer> slow = dummyNode;

        for (int i = 0; i < n; i++) {
            if (fast.next == null) return head;
            fast = fast.next;
        }

        while (fast.next != null) {
            fast = fast.next;
            slow = slow.next;
        }
        slow.next = slow.next.next;
        return dummyNode.next;//dummyNode.next;
    }
}