# Quick Deployment Checklist

Before deploying to Vercel, run through this checklist:

## Pre-Deployment
- [ ] Commit your changes to Git
- [ ] Ensure `.vercelignore` is in the root directory
- [ ] Ensure `vercel.json` is properly configured

## Deploy
```bash
# Option 1: Push to GitHub (automatic deployment)
git add .
git commit -m "Optimized for faster deployment"
git push

# Option 2: Direct deployment with Vercel CLI (faster)
vercel --prod
```

## Post-Deployment Verification
- [ ] Check deployment time in Vercel dashboard
- [ ] Test homepage loads correctly
- [ ] Test a few doctor profile pages
- [ ] Verify images load properly
- [ ] Check browser console for errors

## Troubleshooting

### If deployment is still slow:
1. Check Vercel dashboard for build logs
2. Look for warnings about large files
3. Consider compressing images further
4. Check if Git repository has large history (consider shallow clone)

### If pages don't load:
1. Check Vercel function logs
2. Verify PHP runtime version compatibility
3. Check routing configuration in vercel.json

## Performance Monitoring

After deployment, monitor:
- **Build Time**: Should be under 2 minutes
- **Function Cold Start**: Should be under 3 seconds
- **Page Load Time**: Should be under 2 seconds

Access metrics at: https://vercel.com/dashboard
