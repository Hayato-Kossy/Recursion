class BinaryTree{
    constructor(data, left = null, right = null){
        this.data = data;
        this.left = left;
        this.right = right;
    }
}

function sumOfThreeNodes(root){
    let sum = 0;

    if (root == null) return 0;

    sum += root.data;
    sum += root.left == null ? 0 : root.left.data;
    sum += root.right == null ? 0 : root.right.data;

    return sum;
}