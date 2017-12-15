#!/bin/sh

# Grab and unpack the tarball (16M) into your home directory (It will create ~/texmf, if it doesn't exist):

cd ~
wget http://internap.dl.sourceforge.net/sourceforge/farsitex/farsitex-1.0pre1.tar.bz2
tar jxf farsitex-1.0pre1.tar.bz2

# Copy or symlink these files into PATH, eg. in ~/bin (You may need to rebuild the first two for your architecture. Just change to their directory and run make clean all):

mkdir -p ~/bin
ln -s ~/texmf/source/farsitex/ftx2tex/ftx2tex ~/bin
ln -s ~/texmf/source/farsitex/fmakeidx/fmakeidx ~/bin
ln -s ~/texmf/scripts/farsitex/bin/* ~/bin

# Copy the farsitex.map file into its new location under teTeX 3.0. After this, it should work will all versions of teTeX (you may get some warnings. Just ignore them.):

mkdir -p ~/texmf/fonts/map/dvips
cp -r ~/texmf/dvips/farsitex ~/texmf/fonts/map/dvips/

# Recent versions of teTeX use pdfeTeX as their default TeX engine, and FarsiTeX detects that and enables PDF output. To fix this we need to shuffle some bits around. In short, duplicate farsitex.ini so we can modify it for DVI output but not PDF; turn PDF off, by removing the first line of fadvitex.ini; and create a new fmtutil.cnf to use the new fadvitex.ini file:

tail -n +2 ~/texmf/tex/farsitex/config/farsitex.ini > ~/texmf/tex/farsitex/config/fadvitex.ini
echo "farsitex etex - *fadvitex.ini" > ~/texmf/tetex/fmtutil.cnf
echo "fapdftex pdfetex - *farsitex.ini" >> ~/texmf/tetex/fmtutil.cnf

# Now, update teTeX's file database by running:

texhash

# Build the formats:

fmtutil --cnffile ~/texmf/tetex/fmtutil.cnf --byfmt farsitex
fmtutil --cnffile ~/texmf/tetex/fmtutil.cnf --byfmt fapdftex

# Enable the font mappings:

updmap --enable MixedMap=farsitex.map

# That's it. Test your brand new FarsiTeX installation:

# convert FTX to TEX
ftx2tex ~/texmf/doc/persian/farsitex/base/ftexthes/test.ftx
# create DVI
farsitex ~/texmf/doc/persian/farsitex/base/ftexthes/test.tex
# create PDF
fapdftex ~/texmf/doc/persian/farsitex/base/ftexthes/test.tex


# Start by downloading and installing the Windows installer (644K) (Select Next in every step, and finally Finish):

wget http://umn.dl.sourceforge.net/sourceforge/farsitex/farsitex-editor-alpha9.1.exe
wine farsitex-editor-alpha9.1.exe

# We need to update the font editor uses to one that reflectschanges in farsitex-1.0pre1. This is only necessary if you didn't have to get the farsitex.bdf font working. This step depends a bit on your WINE configuration. Move the font manually if it doesn't work.

wget http://farsitex.org/files/farsitex.fon
mv farsitex.fon ~/.wine/*/[Ww]indows/[Ff]onts/
rm -f ~/.wine/*/[Ww]indows/[Ff]onts/FarsiTeX.fon

# Create a shell script named ftexed to launch it. We need to find where the installer placed Ftexed.exe, and run it under WINE. This depends on your WINE configuration. Tweak if this doesn't work:

echo "wine ~/.wine/*/Program\ Files/MikTeX/miktex/bin/Ftexed.exe" > ~/bin/ftexed
chmod a+x ~/bin/ftexed

# That's almost it! The items in the Run menu don't work. Use command-line tools instead. Launch it:

ftexed

# Making the Run menu launchers to work needs some more involved magic. So I'll don't write it down here. Just grab the script and let it do. The ftex-to-unicode item still doesn't work as the converter doesn't quite exist, but the rest should work nicely:

wget http://farsitex.org/files/install-ftexed-cmd-launchers.sh
bash install-ftexed-cmd-launchers.sh

