def twoSum(intArr,sumInt):
    #ここから書きましょう
    res = []
    for i in range(len(intArr)):
        for j in range(i+1,len(intArr)):
            if intArr[i] + intArr[j] == sumInt:
                res += [i,j]
                return res

    return res