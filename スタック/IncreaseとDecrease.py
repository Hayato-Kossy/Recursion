def getNumber(code):
    stack = [i for i in range(len(code) + 2)][1:][::-1]

    print(stack)
    ans = ""
    if len(stack) > 9:
        return 0
    
    index = 1
    for i in range(len(code)):
        if code[i] == 'D':
            index += 1
        elif code[i] == 'I':
            cnt = 0
            tmp = ""
            while cnt < index:
                tmp += str(stack.pop())
                cnt += 1
        
            ans += tmp[::-1]
            index = 1

    for i in range(index):
        ans += str(stack[i])

    return ans