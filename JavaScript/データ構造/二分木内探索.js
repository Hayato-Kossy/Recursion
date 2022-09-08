class BinaryTree{
    constructor(data, left = null, right = null){
        this.data = data;
        this.left = left;
        this.right = right;
    }
}

function bstSearch(root,key){
    let iterator = root;

    while (iterator != null){
        if (iterator.data == key) return iterator;

        if(iterator.data > key) iterator = iterator.left;
        else iterator = iterator.right;
    }

    return iterator;
}