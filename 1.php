$score = 75;
switch ($score) {
    case $score >= 90:
        echo "优秀";
        break;
    case $score >= 70 and $score < 90:
        echo "良好";
        break;
    case $score >= 60 and $score < 70:
        echo "合格";
        break;
    default:
        echo "不合格";
}
