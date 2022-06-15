class Node:
    def __init__(self, data):
        self.data = data
        self.next = None

class Stack:
    def __init__(self):
        self.head = None

    def push(self,data):
        temp = self.head
        self.head = Node(data)
        self.head.next = temp

    def pop(self):
        if self.head == None: return None
        temp = self.head
        self.head = self.head.next
        return temp.data

    def peek(self):
        if self.head is None: return None
        return self.head.data

def operatorChecker(op1,op2,operatorChar):
    op1 = int(op1)
    op2 = int(op2)

    result = 0

    if operatorChar == "+":
        result = op1 + op2
    if operatorChar == "-":
        result = op2 - op1
    if operatorChar == "*":
        result = op1 * op2
    if operatorChar == "/":
        result = op2 // op1
    return result

def expressionParser(expression):
    num_stack = Stack()
    operator_stack = Stack()
    tmp = ''
    for i in expression:
        if i.isnumeric():
            tmp += str(i)
            continue
        num_stack.push(tmp)
        tmp = ''

        if operator_stack.peek() == None:
            operator_stack.push(i)
            continue

        if operator_stack.peek() == '*' or operator_stack.peek() == '/':
            if i == '+' or i == '-':
                while operator_stack.peek() is not None:
                    num_stack.push(operatorChecker(num_stack.pop(), num_stack.pop(), operator_stack.pop()))
                operator_stack.push(i)
            else:
                num_stack.push(operatorChecker(num_stack.pop(), num_stack.pop(), operator_stack.pop()))
                operator_stack.push(i)
        else:
            if i == '+' or i == '-':
                num_stack.push(operatorChecker(num_stack.pop(), num_stack.pop(), operator_stack.pop()))
                operator_stack.push(i)
            else:
                operator_stack.push(i)
    
    num_stack.push(tmp)

    while operator_stack.peek() is not None:
        num_stack.push(operatorChecker(num_stack.pop(), num_stack.pop(), operator_stack.pop()))


    return num_stack.pop()