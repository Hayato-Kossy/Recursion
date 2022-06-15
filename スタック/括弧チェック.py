def isParenthesesValid(parentheses):
    stack = []

    for parenthese in parentheses:
        if parenthese == '(' or parenthese == '[' or parenthese == '{': 
            stack.append(parenthese)
        else: 
            parenthese = parenthese.replace(')','(').replace(']','[').replace('}','{')
            if len(stack) == 0: return False
            if stack[-1] == parenthese:
                stack.pop()
            else: return False
            
    return True if len(stack) == 0 else False