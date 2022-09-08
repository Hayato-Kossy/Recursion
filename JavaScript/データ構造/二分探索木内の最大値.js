class BinaryTree{
    constructor(data, left = null, right = null){
        this.data = data;
        this.left = left;
        this.right = right;
    }
}

function maximumNode(root){
    let iterator = root;

    while (iterator != null && iterator.right != null){
        iterator = iterator.right;
    }

    return iterator
}