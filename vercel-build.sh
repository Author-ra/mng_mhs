#!/bin/bash
# Vercel build script for CodeIgniter 4

echo "Setting up CodeIgniter for Vercel deployment..."

# Make writable directories writable
chmod -R 755 writable/
chmod -R 755 public/uploads/

echo "Build completed successfully!"