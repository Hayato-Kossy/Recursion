def maximizeCount(intArr,target):
    intArr = sorted(intArr)    
    cnt = 0

    while cnt < len(intArr):
        target -= intArr[cnt]
        if target < 0:
            break
        cnt += 1

    return len(intArr)+1 if sum(intArr) == target else cnt