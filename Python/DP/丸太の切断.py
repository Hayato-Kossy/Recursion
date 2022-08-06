def maxLogProfit(priceList,n):
    DP = [0] + priceList

    j = 0
    for i in range(1, len(DP)):
        while i > j:
            DP[i] = max(DP[i], DP[i - j] + DP[j])
            j += 1
        j = 0
        
    return DP [-1]