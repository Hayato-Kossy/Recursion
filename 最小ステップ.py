def getMinSteps(n):
    if n == 1: return 0

    DP = [0] * (n+1)
    DP[0] = float('inf')
    DP[1] = 0
    DP[2] = 1
    DP[3] = 1

    for i in range(4,n+1):
        DP[i] = 1 + min(DP[i-1], DP[division2(i)], DP[division3(i)])
    return DP[i] if i > 0 else DP[n]

def division2(n):
    return 0 if n % 2 != 0 else n // 2
def division3(n):
    return 0 if n % 3 != 0 else n // 3