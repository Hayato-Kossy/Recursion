class BinaryTree{
    constructor(data){
        this.data = data;
        this.left = null;
        this.right = null;
    }
}


binaryTree = new BinaryTree(10)
node2 = new BinaryTree(6)
node3 = new BinaryTree(8)

binaryTree.left = node2
binaryTree.right = node3
console.log(binaryTree.data)
console.log(binaryTree.left.data)
console.log(binaryTree.right.data)