class Node{
    public int data;
    public Node next;

    public Node(int data){
        this.data = data;
    }
}

class SinglyLinkedList{
    public Node head;

    public SinglyLinkedList(Node head){
        this.head = head;
    }
}

class MyClass{
    public static void main(String[] args){
        Node node1 = new Node(7);
        Node node2 = new Node(99);
        Node node3 = new Node(45);


        node1.next = node2;
        node2.next = node3;

        SinglyLinkedList numList = new SinglyLinkedList(node1);

        Node currentNode = numList.head;

        while (currentNode != null){
            System.out.println(currentNode.data);
            currentNode = currentNode.next;
        }
    }   
}