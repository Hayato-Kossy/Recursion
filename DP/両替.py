def minCoinChange(coins,amount):
    DP = [float('inf')] * (amount + 1)
    DP[0] = 0

    for i in range(len(DP)):
        j = 0
        while j < len(coins):
            if i - coins[j] >= 0:
                DP[i] = min(DP[i], DP[i - coins[j]] + 1)
            j += 1
    return DP[-1] if DP[-1] != float('inf') else -1