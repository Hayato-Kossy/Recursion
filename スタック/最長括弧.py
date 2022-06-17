def longestValidParentheses(parentheses):
    cnt = []
    stack = [-1]
    for i in range(len(parentheses)):
        if parentheses[i] == '(': stack.append(i)
        else:
            stack.pop()
            if len(stack) == 0: stack.append(i)
            else: cnt.append(i - stack[-1])  
    return max(cnt) if len(cnt) > 0 else i - stack[-1]