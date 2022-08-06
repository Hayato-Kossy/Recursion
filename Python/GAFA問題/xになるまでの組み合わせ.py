def numberOfWay(x):
    DP = [0] * (x+1)

    DP[0] = 1
    DP[1] = 1

    for i in range(2,x+1):
        DP[i] = DP[i-1] + DP[i-2]

    return DP[-1]