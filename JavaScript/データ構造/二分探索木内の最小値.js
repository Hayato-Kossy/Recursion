class BinaryTree{
    constructor(data, left = null, right = null){
        this.data = data;
        this.left = left;
        this.right = right;
    }
}

function minimumNode(root){
    let iterator = root;

    while (iterator != null && iterator.left != null){
        iterator = iterator.left;
    }

    return iterator;
}