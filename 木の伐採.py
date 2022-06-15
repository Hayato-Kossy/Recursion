def maxLengthOfTrees(intArr):

    DP = [0] * len(intArr)

    for i in range(1,len(intArr)):
        for j in range(i):
            if intArr[i] > intArr[j]:                 
                DP[i] = max(DP[i], DP[j]+1)

    return max(DP)+1