$timestamp = Get-Date -Format "yyyyMMddHHmmss"
$zipFile = "laravel_project_$timestamp.zip"

# Define files and folders to include (excluding .env and bootstrap/cache)
$includeList = @(
    "app", "bootstrap", "config", "database", "public", "resources/views", "routes", "storage", "vendor",
    "artisan", "composer.json", "composer.lock"
)

# Create a temporary directory
$tempDir = "laravel_temp"
New-Item -ItemType Directory -Path $tempDir | Out-Null

# Copy necessary files/folders
foreach ($item in $includeList) {
    Copy-Item -Path $item -Destination "$tempDir\$item" -Recurse -Force
}

# Exclude bootstrap/cache
Remove-Item -Path "$tempDir\bootstrap\cache" -Recurse -Force -ErrorAction SilentlyContinue

# Create ZIP
# Compress-Archive -Path "$tempDir\*" -DestinationPath $zipFile -Force

# Cleanup
# Remove-Item -Recurse -Force $tempDir

# Write-Host "Zipping completed: $zipFile"
